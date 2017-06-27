import numpy as np
import csv

def sigmoidfun(x,deriv=False):
    if(deriv==True):
        return x*(1-x)
        
        return 1/(1+np.exp(-x))

# define the input and the output values

inputlines = [inputline.split(',') for inputline in open('test.csv')]
inputvalue = np.array([[float(x) for x in inputline[:3]] for inputline in inputlines[1:]])

outputlines = [outputline.split(',') for outputline in open('comprehension_score.csv')]
outputvalue =np.array( [[float(z) for z in outputline[:1]] for outputline in outputlines[1:]]   )



np.random.seed(1)

# random initialze the weights
w0 = 2*np.random.random((3,4)) - 1
w1 = 2*np.random.random((4,1)) - 1


for num in xrange(60000):
    layer0value = inputvalue
    layer1value = sigmoidfun(np.dot(layer0value,w0))
    guessvalue = sigmoidfun(np.dot(layer1value,w1))
    
    # difference between real value and guess value
    differencevalue = outputvalue - guessvalue
    
    if (num% 10000) == 0:
        print "Error:" + str(np.mean(np.abs(differencevalue)))


    layer2_delta = differencevalue*sigmoidfun(guessvalue,deriv=True)
    l1_error = layer2_delta.dot(w1.T)
    layer1_delta = l1_error * sigmoidfun(layer1value,deriv=True)


w1 += layer1value.T.dot(layer2_delta)
    w0 += layer0value.T.dot(layer1_delta)



