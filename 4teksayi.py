numberList = []
n = int(input("Liste uzunluğunu giriniz : "))

print("\n")
for i in range(0, n):
    print( i, ". elemanı giriniz" ":")
    item = int(input())
    numberList.append(item)
print("Listeniz : ", numberList)

newnumberList = []
for num in numberList: 
      
    if num % 2 != 0: 
        newnumberList.append(num)
        
print("Listeniz içindeki en büyük tek sayı :", max(newnumberList))
