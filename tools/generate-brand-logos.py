from pathlib import Path
from PIL import Image, ImageDraw, ImageFont

ROOT = Path(__file__).resolve().parents[1]
OUT = ROOT / "assets" / "brand-logos"
OUT.mkdir(parents=True, exist_ok=True)

BRANDS = {
    "praas": ("BTP", "PraaS", "A BTP Innovations Technology Brand"),
    "techadvisors": ("BTP", "TechAdvisors", "A BTP Innovations Technology Brand"),
    "securiscope": ("BTP", "SecuriSCOPE", "A BTP Innovations Technology Brand"),
    "managesp": ("BTP", "ManageSP", "A BTP Innovations Technology Brand"),
    "cloudexcelon": ("BTP", "CloudEXCELON", "A BTP Innovations Technology Brand"),
    "codeignite": ("BTP", "CodeIGNITE", "A BTP Innovations Technology Brand"),
    "datastaisis": ("BTP", "DatastAIsis", "A BTP Innovations Technology Brand"),
}


def font(size: int) -> ImageFont.FreeTypeFont:
    candidates = [
        r"C:\Windows\Fonts\arialbd.ttf",
        r"C:\Windows\Fonts\arial.ttf",
        r"C:\Windows\Fonts\segoeuib.ttf",
    ]
    for candidate in candidates:
        if Path(candidate).exists():
            return ImageFont.truetype(candidate, size=size)
    return ImageFont.load_default()


def fit_font(text: str, start: int, max_width: int) -> ImageFont.FreeTypeFont:
    size = start
    while size > 14:
        f = font(size)
        box = ImageDraw.Draw(Image.new("RGB", (1, 1))).textbbox((0, 0), text, font=f)
        if box[2] - box[0] <= max_width:
            return f
        size -= 1
    return font(size)


def draw_logo(slug: str, top: str, bottom: str, tagline: str) -> None:
    width, height = 360, 170
    img = Image.new("RGBA", (width, height), "white")
    draw = ImageDraw.Draw(img)

    # Keep the PraaS visual mark: three vertical bars in black, red, and blue.
    base_x = 28
    base_y = 110
    bar_w = 27
    gap = 8
    heights = [48, 78, 108]
    colors = ["#000000", "#FF3B30", "#2AA8FF"]
    for i, (bar_h, color) in enumerate(zip(heights, colors)):
        x = base_x + i * (bar_w + gap)
        draw.rectangle([x, base_y - bar_h, x + bar_w, base_y], fill=color)

    text_x = 132
    top_font = font(58)
    bottom_font = fit_font(bottom, 44, width - text_x - 18)
    tagline_font = fit_font(tagline, 14, width - 32)

    draw.text((text_x, 14), top, fill="#000000", font=top_font)
    draw.text((text_x, 73), bottom, fill="#000000", font=bottom_font)

    tagline_box = draw.textbbox((0, 0), tagline, font=tagline_font)
    tagline_w = tagline_box[2] - tagline_box[0]
    draw.text(((width - tagline_w) / 2, 138), tagline, fill="#111111", font=tagline_font)

    img.save(OUT / f"{slug}.png")


for slug, parts in BRANDS.items():
    draw_logo(slug, *parts)

print(f"Generated {len(BRANDS)} logos in {OUT}")
