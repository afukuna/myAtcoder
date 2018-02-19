X, Y = (int(i) for i in input().split()) 

RESULT = 1

while (True) :
  if X * 2 <= Y :
    RESULT+=1
    X = X * 2
  else:
    break

print(RESULT)
