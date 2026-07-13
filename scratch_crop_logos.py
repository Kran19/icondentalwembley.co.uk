import os
from PIL import Image

def trim(im):
    # Get the bounding box of the alpha channel
    bbox = im.split()[-1].getbbox()
    if bbox:
        return im.crop(bbox)
    return im

def pad_to_aspect_ratio(im, target_ratio):
    width, height = im.size
    current_ratio = width / height
    
    if current_ratio > target_ratio:
        # Image is wider than target, need to pad height
        new_height = int(width / target_ratio)
        new_im = Image.new("RGBA", (width, new_height), (0, 0, 0, 0))
        # Center vertically
        new_im.paste(im, (0, (new_height - height) // 2))
        return new_im
    else:
        # Image is taller than target, need to pad width
        new_width = int(height * target_ratio)
        new_im = Image.new("RGBA", (new_width, height), (0, 0, 0, 0))
        # Center horizontally
        new_im.paste(im, (((new_width - width) // 2), 0))
        return new_im

def main():
    light_path = r"C:\xampp\htdocs\dental\icon-dental\assets\images\logo-light.png"
    dark_path = r"C:\xampp\htdocs\dental\icon-dental\assets\images\logo-dark.png"
    
    img_light = Image.open(light_path)
    img_dark = Image.open(dark_path)
    
    trimmed_light = trim(img_light)
    trimmed_dark = trim(img_dark)
    
    print(f"Trimmed Light size: {trimmed_light.size}")
    print(f"Trimmed Dark size: {trimmed_dark.size}")
    
    # We want both images to have the exact same aspect ratio so they scale identically
    ratio_light = trimmed_light.size[0] / trimmed_light.size[1]
    ratio_dark = trimmed_dark.size[0] / trimmed_dark.size[1]
    
    # Use the larger aspect ratio as the target to avoid clipping
    target_ratio = max(ratio_light, ratio_dark)
    
    padded_light = pad_to_aspect_ratio(trimmed_light, target_ratio)
    padded_dark = pad_to_aspect_ratio(trimmed_dark, target_ratio)
    
    # Resize both to a standard size (e.g. 600x400 or keeping high resolution like 1500x1000)
    # Let's keep them high-res, e.g. width of 1500 px.
    target_width = 1500
    target_height = int(target_width / target_ratio)
    
    final_light = padded_light.resize((target_width, target_height), Image.Resampling.LANCZOS)
    final_dark = padded_dark.resize((target_width, target_height), Image.Resampling.LANCZOS)
    
    # Save back
    final_light.save(light_path, "PNG")
    final_dark.save(dark_path, "PNG")
    
    print(f"Successfully processed both logos. New size: {target_width}x{target_height}")

if __name__ == "__main__":
    main()
