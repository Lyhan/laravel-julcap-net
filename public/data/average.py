import sys
number = []
x=0
while True:
    try:
        temp = input("Please enter a number: ")
        if temp == '':
            print()
            print("Total: ",len(number), "Average: ",(sum(number)/len(number)))
            print("Highest: ",max(number), "Lowest: ",min(number))
            print("Numbers:",number)
            sys.exit()
        else:
                number.append(int(temp))
        x+=1
    except ValueError as err:
        print(err)
    except ZeroDivisionError as err:
        print("No numbers have been entered")
