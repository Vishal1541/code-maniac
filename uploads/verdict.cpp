#include <bits/stdc++.h>
using namespace std;

string probId,orig_op,user_op,f_orig,f_user;
bool verdict = true;

int main(){
	freopen("probId","r",stdin);
	freopen("verdict","w",stdout);
	cin>>probId;
	f_orig = "op_"+probId;
	f_user = "user_op_"+probId;
	char *f1 = new char[20];
	char *f2 = new char[20];
	for(int i=0; i<f_orig.length(); i++)	f1[i] = f_orig[i];
	f1[f_orig.length()] = 0;
	for(int i=0; i<f_user.length(); i++)	f2[i] = f_user[i];
	f2[f_user.length()] = 0;
	fstream file_orig_op(f1);
	fstream file_user_op(f2);
	while(getline(file_orig_op,orig_op) && getline(file_user_op,user_op)){
		for(int i=0; i<orig_op.length(); i++){
			if(orig_op[i]!=user_op[i]){
				verdict = false;
				break;
			}
		}
	}
	cout<<(verdict?"AC":"WA");
	fclose(stdout);
	return 0;
}