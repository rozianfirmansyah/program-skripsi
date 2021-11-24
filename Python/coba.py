#library
import numpy as np
import pickle
from sklearn.linear_model import LinearRegression

#dataset 
X= np.array([40,20,25,20,30,50,40,20,50,40,25,50]).reshape((-1, 1))
Y= np.array([385,400,395,365,475,440,490,420,560,525,480,510])

#call model regression
model = LinearRegression().fit(X,Y)

#save model
filename = 'model.sav'
pickle.dump(model, open(filename, 'wb'))

#load model
loaded_model = pickle.load(open(filename, 'rb'))

#prediction model
loaded_model.predict(20)
