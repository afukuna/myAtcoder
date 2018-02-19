C = [[int(i) for i in input().split()] for i in range(3)]
res = 'No'
for i in range(100) :
  a1 = i
  b1 = C[0][0] - a1
  b2 = C[0][1] - a1
  b3 = C[0][2] - a1
  a2 = C[1][0] - b1
  a3 = C[2][0] - b1
  if C[1][1] != a2 + b2 :
    continue
  if C[1][2] != a2 + b3 :
    continue
  if C[2][1] != a3 + b2 :
    continue
  if C[2][2] != a3 + b3 :
    continue
  res = 'Yes'
  break
print(res)
