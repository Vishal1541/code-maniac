g++ -std=c++14 code.cpp -o code
./code
diff user_op_10001 op_10001
if [ $? -eq 0 ]
	then
		echo "Accepted" > verdict.txt
else
		echo "Wrong Answer" > verdict.txt
fi
# g++ -std=c++14 verdict.cpp -o ver
# ./ver
# ./ver
