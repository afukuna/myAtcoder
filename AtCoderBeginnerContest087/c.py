N = int(input())
A = [input().split() for l in range(2)]

sum_list = []

for i in range(N):
  sum = 0
  for j in range(N):
    if i >= j:
      sum += int(A[0][j])
    if i <= j:
      sum += int(A[1][j])
  sum_list.append(sum)
print(max(sum_list))
