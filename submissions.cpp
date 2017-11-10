#include <bits/stdc++.h>
using namespace std;

string line,handle,final_status;
int spaces,idx,probID[20],id=10001,rand_status,rand_id,final_id,times;
string status[3];

int main(){
	// freopen("testin","r",stdin);
	freopen("RegisteredUsers.sql","r",stdin);
	freopen("Submissions.sql","w",stdout);
	// freopen("testout","w",stdout);
	srand(time(NULL));
	status[0] = "AC", status[1] = "WA", status[2] = "TLE";
	for(int i=0; i<20; i++)	probID[i] = id++;
	while(getline(cin,line)){
		spaces = 0;
		idx = 0;
		handle = "";
		while(spaces!=11){
			if(line[idx++]==' ')	spaces++;
		}
		idx++;
		while(line[idx]!='\'')	handle += line[idx++];
		times = rand()%5;
		while(times--){
			rand_id  = rand()%20;
			rand_status = rand()%3;
			final_id = probID[rand_id];
			final_status = status[rand_status];
			cout<<"Insert into Submissions values('"<<final_id<<"','"<<handle<<"','"<<final_status<<"');"<<endl;
		}
	}
	return 0;
}
