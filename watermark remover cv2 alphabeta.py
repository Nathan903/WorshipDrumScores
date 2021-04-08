#take all you can, give all you can. Savvy?

import matplotlib.pyplot as plt
import cv2
import numpy as np
alpha =250
beta = -160

#legacy
def trymany1():
    img = cv2.imread(r"C:\Users\Nathan\Downloads\1 (1).jpg")

    for i in range(200):
        alpha =-100+i
        for j in range(200):
            beta = -100+j
            new = alpha * img + beta
            new = np.clip(new, 0, 255).astype(np.uint8)    
            path = r"E:\Files\working pcie\trypic\\" +str(alpha)+"and"+str(beta)+".jpg"
            cv2.imwrite(path, new)
        print(i)



#done
def trysingle(dirname, fname, alpha, beta, outputname):
    srcname = dirname + fname
    tryimg = cv2.imread(srcname)
    print(srcname)


    new = alpha * tryimg + beta
    new = np.clip(new, 0, 255).astype(np.uint8)

    print(alpha, beta)
    tryfname= dirname+outputname+"alpha"+str(alpha)+"beta"+str(beta)+"_"+fname
    cv2.imwrite(tryfname, new)

#trysingle("1.jpg", 2.57,-161,"1")
alpha = 2.596594846224838
beta = -161

def trymany(dirname, fname, an, amin, amax, bn, bmin, bmax):
    astep = (amax-amin)/an
    bstep = (bmax-bmin)/bn
    alpha = amin - astep
    beta = bmin - bstep
    for i in range(an):
        alpha +=astep
        for j in range(bn):
            beta +=bstep
            mmname = "alpha"+str(alpha)+"beta"+str(beta)
            trysingle(dirname, fname, alpha, beta, mmname)
        beta = bmin-bstep
#trymany("1.jpg", 50, 2, 3, 5, -165, -160)
#trymany("1 (2).jpg", 1, 2.155, 2.165, 1, -200, -100)

Ftrash = r"E:\\"
#trysingle(Ftrash, "b.jpg", 2.155,-200,"cv2")

for i in range(4):
    i+=1
    n = "ds" +" (" + str(i)+").jpg"
    trysingle(Ftrash, n, 2.16,-188,"cv2loop")

#小小董伴奏：alpha2.16beta165.0
#（绿色灰色）鼓手学院：2.155,-205




