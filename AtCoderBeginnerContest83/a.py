N = list(map(int, input().split()))

if sum(N[0:2]) > sum(N[2:4]):
  print('Left')
elif sum(N[0:2]) == sum(N[2:4]):
  print('Balanced')
else:
  print('Right')
