from PIL import Image, ImageEnhance
from pathlib import Path

def increaseContrast(f, factor,factorb):
    im = Image.open(f)
    im = ImageEnhance.Contrast(im).enhance(factor)
    im_output = ImageEnhance.Brightness(im).enhance(factorb)
    im_output.save(str(factor)+"-"+str(factorb)+str(f))
    
folder = Path().rglob('vlcsnap*png')
folder2 = Path().rglob('Still*png')
folder3 = Path().rglob('Still*jpg')
folder4 = Path().rglob('Still*bmp')
files = [x for x in folder]+[x for x in folder2]+[x for x in folder3]+[x for x in folder4]

for f in files:
    print(f)
    increaseContrast(f, 1.2,1.05)
    

