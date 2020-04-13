# ������� ���������

### ��������� ����� � ����������� �����
	git config --global user.name "Your Name"
	git config --global user.email "your_email@whatever.com"

### ��������� ��������� ��������� �����

Unix/Mac
	git config --global core.autocrlf input
	git config --global core.safecrlf warn

Windows
	git config --global core.autocrlf true
	git config --global core.safecrlf warn

# ������ � ������������ � �������������

### �������� ���������� hello
	mkdir hello

### ������� � ��������� ���������� hello
	cd hello

### ������� ���� hello.html
	touch hello.html

### ������� ����������� �� ��������
	git init

### ����������� ���������� hello � ������� �� cloned_hello
	git clone hello cloned_hello

### �������� ����������� ������� ����������
	ls

### ������ �� ������ ��������� ������������
	git remote

### ����������� ���� hello.html �� ������� ���������� � �������� ���������� lib
	git mv hello.html lib

# ��������� � ������

### �������� � ����������� ����
	git add hello.html
	git commit -m "First Commit"

### �������� ��������� �����������
	git status

# ��������� ���������� � �������� �����������

### �������� ������ ������������� ���������
	git log

### �������� ������ � ������������ �������
	git log --pretty=oneline
	���
	git log --pretty=format:"%h %ad | %s%d [%an]" --graph --date=short

### ����������� ���������� ����� 
	cat hello.html

# ������ � ������� � ������ ���������

### ������������� �� ����� master
	git checkout master

### ������ ��������� (����� ��������)
	git reset HEAD hello.html

### ������ ��������� (����� �������)
	git revert HEAD

### ������� ����� ����� style
	git checkout -b style

### ������� ������� ����� � ����� master
	git merge master

### ���������������
	git rebase master

### ����������� �����, ��������� � �����������
	git branch

### ���������� � ������� ���������
	git fetch
	git merge origin/master
���
	git pull

# �������� ���������

### ��������� ��������� � ��������� �����������
	git push origin master