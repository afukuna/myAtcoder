t_before = 0
x_before = 0
y_before = 0
result = 'Yes'

N = int(input())
for i in range(N) :
  t, x, y = map(int, input().split())
  t_diff = abs(t - t_before)
  x_diff = abs(x - x_before)
  y_diff = abs(y - y_before)
  if (x_diff <= t_diff) and (y_diff <= t_diff) and ((t_diff - (x_diff + y_diff)) % 2 == 0) :
    t_before = t
    x_before = x
    y_before = y
  else :
    result = 'No'
    break
print(result)
