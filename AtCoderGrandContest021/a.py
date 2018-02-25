N = int(input())
if N < 10 :
  print(N)
else :
  L = list(map(int, list(str(N))))
  if (L.count(9) == len(L)) or (L[0] != 9 and L.count(9) == len(L) -1) :
    print(sum(L))
  else :
    print(9 * (len(L) - 1) + int(L[0]) - 1)
