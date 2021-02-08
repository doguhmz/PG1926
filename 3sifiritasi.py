from collections import deque
numberList = []
n = int(input("Liste uzunluğunu giriniz : "))

print("\n")
for i in range(0, n):
    print( i, ". elemanı giriniz" ":")
    item = int(input())
    numberList.append(item)
    if item == 0:
        numberList.remove(0)
        numberList = deque(numberList) 
        numberList.appendleft(0) 
        numberList = list(numberList) 
print("Listeniz :  ", numberList)
