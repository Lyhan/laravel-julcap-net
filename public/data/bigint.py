import sys
# Digit definition
digits = [[' ### ','#   #','#   #','#   #','#   #','#   #',' ### '], #Zero
['  #  ',' ##  ','  #  ','  #  ','  #  ','  #  ',' ### '], #One
[' ### ','    #','    #',' ### ','#    ','#    ',' ### '], #Two
[' ### ','    #','    #',' ### ','    #','    #',' ### '], #Three
['#   #','#   #','#   #',' ### ','    #','    #','    #'], #Four
[' ### ','#    ','#    ',' ### ','    #','    #',' ### '], #Five
[' ### ','#    ','#    ',' ### ','#   #','#   #',' ### '], #Six
[' ### ','    #','    #','    #','    #','    #','    #'], #Seven
[' ### ','#   #','#   #',' ### ','#   #','#   #',' ### '], #Eight
[' ### ','#   #','#   #',' ### ','    #','    #','    #']] #Nine
try:

#Function to convert the '#' to the numbers typed

	def translate(string,a,b):
		i=0
		chars=list(string)
		while len(chars) > i:
			if chars[i]==a:
				chars[i]=b
			i+=1
		result= ''.join(chars)
		return result
		
#Check for arguments, if no arguments detected the user is prompted for imput

	if len(sys.argv) > 1:
		number = str(sys.argv[1])
	else:
		number = str(input("Enter a number:"))
		
#Printin the numbers on the screen
	i = 0
	print()
	while i < len(digits[i]):
		x=0
		line=" "
		while x < len(number):
			line+=translate(digits[int(number[x])][i],'#',str(number[x]))+" "
			x+=1
		print(line)
		i+=1


#Error handling

except ValueError as err:
	print(err)
except IndexError as err:
	print(err)