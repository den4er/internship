# Базовые настройки

### Установка имени и электронной почты
	git config --global user.name "Your Name"
	git config --global user.email "your_email@whatever.com"

### Параметры установки окончаний строк

Unix/Mac

	git config --global core.autocrlf input
	git config --global core.safecrlf warn

Windows

	git config --global core.autocrlf true
	git config --global core.safecrlf warn

# Работа с директориями и репозиториями

### Создание директории hello
	mkdir hello

### Переход в созданную директорию hello
	cd hello

### Создать файл hello.html
	touch hello.html

### Создать репозиторий из каталога
	git init

### Клонировать директорию hello и назвать ее cloned_hello
	git clone hello cloned_hello

### Просмотр содержимого текущей директории
	ls

### Узнать об именах удаленных репозиториев
	git remote

### Переместить файл hello.html из текущей директории в дочернюю директорию lib
	git mv hello.html lib

# Изменение и коммит

### Добавить и закоммитить файл
	git add hello.html
	git commit -m "First Commit"

### Проверка состояния репозитория
	git status

# Получение информации и просмотр содержимого

### Получить список произведенных изменений
	git log

### Получить список в однострочной формате
	git log --pretty=oneline
	или
	git log --pretty=format:"%h %ad | %s%d [%an]" --graph --date=short

### Просмотреть сожержимое файла 
	cat hello.html

# Работа с ветками и отмена изменений

### Переключиться на верку master
	git checkout master

### Отмена изменений (перед коммитом)
	git reset HEAD hello.html

### Отмена изменений (после коммита)
	git revert HEAD

### Создать новую ветку style
	git checkout -b style

### Слияние текущей ветки и ветки master
	git merge master

### Перебазирование
	git rebase master

### Просмотреть ветки, доступные в репозитории
	git branch

### Извлечение и слияние изменений
	git fetch
	git merge origin/master
или
	git pull

# Отправка изменений

### Отправить изменения в удаленный репозиторий
	git push origin master
