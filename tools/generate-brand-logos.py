from pathlib import Path
from PIL import Image, ImageDraw, ImageFont

ROOT = Path(__file__).resolve().parents[1]
OUT = ROOT / "assets" / "brand-logos"
OUT.mkdir(parents=True, exist_ok=True)

BRANDS = {
    "praas": "PraaS",
    "techadvisors": "TechAdvisors",
    "securiscope": "SecuriSCOPE",
    "managesp": "ManageSP",
    "cloudexcelon": "CloudEXCELON",
    "codeignite": "CodeIGNITE",
    "datastaisis": "DatastAIsis",
}

TAGLINE = "A BTP Innovations Technology Brand"
COLORS = ["#000000", "#FF3B30", "#2AA8FF"]


def font(size: int, bold: bool = True):
    names = ["arialbd.ttf", "segoeuib.ttf"] if bold else ["arial.ttf", "segoeui.ttf"]
    for name in names:
        path = Path("C:/Windows/Fonts") / name
        if path.exists():
            return ImageFont.truetype(str(path), size=size)
    return ImageFont.load_default()


def fit(text: str, start: int, max_width: int):
    draw = ImageDraw.Draw(Image.new("RGBA", (1, 1)))
    for size in range(start, 13, -1):
        f = font(size)
        box = draw.textbbox((0, 0), text, font=f)
        if box[2] - box[0] <= max_width:
            return f
    return font(14)


def svg_text(slug: str, brand: str) -> str:
    brand_size = 46 if len(brand) <= 8 else 34 if len(brand) <= 12 else 28
    return f'''<svg xmlns="http://www.w3.org/2000/svg" width="360" height="170" viewBox="0 0 360 170" role="img" aria-label="BTP {brand} logo">
  <rect x="28" y="62" width="27" height="48" fill="{COLORS[0]}"/>
  <rect x="63" y="32" width="27" height="78" fill="{COLORS[1]}"/>
  <rect x="98" y="2" width="27" height="108" fill="{COLORS[2]}"/>
  <text x="132" y="61" fill="#000000" font-family="Arial, Segoe UI, sans-serif" font-size="58" font-weight="800">BTP</text>
  <text x="132" y="108" fill="#000000" font-family="Arial, Segoe UI, sans-serif" font-size="{brand_size}" font-weight="800">{brand}</text>
  <text x="28" y="150" fill="#111111" font-family="Arial, Segoe UI, sans-serif" font-size="13" font-weight="700">{TAGLINE}</text>
</svg>
'''


def draw_png(slug: str, brand: str):
    image = Image.new("RGBA", (360, 170), (255, 255, 255, 0))
    draw = ImageDraw.Draw(image)
    base_y = 110
    for i, height in enumerate([48, 78, 108]):
        x = 28 + i * 35
        draw.rectangle([x, base_y - height, x + 27, base_y], fill=COLORS[i])
    draw.text((132, 8), "BTP", fill="#000000", font=font(58))
    draw.text((132, 68), brand, fill="#000000", font=fit(brand, 46, 218))
    draw.text((28, 136), TAGLINE, fill="#111111", font=fit(TAGLINE, 14, 304))
    image.save(OUT / f"{slug}.png")


for slug, brand in BRANDS.items():
    draw_png(slug, brand)
    (OUT / f"{slug}.svg").write_text(svg_text(slug, brand), encoding="utf-8")

print(f"Generated {len(BRANDS)} transparent PNG and SVG logo pairs in {OUT}")
