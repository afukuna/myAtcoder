N, A, B = (int(i) for i in input().split()) 

RESULT = 0

for i in range(1, N+1):
 if A <= sum([int(j) for j in str(i)]) <= B :
   RESULT += i
print(RESULT)
