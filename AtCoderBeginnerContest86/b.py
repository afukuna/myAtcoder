import math
A, B = map(int, input().split())
k = math.sqrt(int(''.join(map(str, [A, B]))))
if k == int(k) :
  print('Yes')
else :
  print('No')
