import re
A, B = (int(i) for i in input().split())
if re.match(r"\d{%s}-\d{%s}" % (A, B), input()):
  print("Yes")
else:
  print("No")
