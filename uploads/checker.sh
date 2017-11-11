# id=$(<probId)
while read line; do
	echo $id > verdict.txt
done < probId
echo $id > verdict.txt
g++ -std=c++14 code.cpp -o code
./code
diff user_op_$id op_$id
if [ $? -eq 0 ]
	then
		echo "Accepted" > verdict.txt
else
		echo "Wrong Answer" > verdict.txt
fi