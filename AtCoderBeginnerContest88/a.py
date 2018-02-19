N= int(input()[-3:])
A= int(input())

if N % 500 == 0 :
  print('Yes')
else :
  if N > 500 :
    N = N - 500
  if N <= A :
    print('Yes')
  else :
    print('No')
