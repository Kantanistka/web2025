# Лабораторная работа №1: Nginx + Docker

## 👩‍💻 Автор
ФИО: Владимирова Елизавета Константиновна  
Группа: 3МО-РБД1

---

## 📌 Описание задания
Создать веб-сервер в Docker с использованием Nginx и подключить HTML-страницу.  
Результат доступен по адресу [http://localhost:3000](http://localhost:3000).

---

## ⚙️ Как запустить проект

1. Клонировать репозиторий:
   ```bash
   git clone https://github.com/Kantanistka/web2025.git
   cd nginx-lab
Запустить контейнеры:
```bash
docker-compose up -d --build
```
Открыть в браузере:
```http://localhost:3000```
📂 Содержимое проекта

```docker-compose.yml``` — описание сервиса Nginx

```code/index.html``` — главная HTML-страница

```code/about.html``` — вторая HTML-страница (для 4 этапа)

```screenshots/lab1/``` — скриншоты первой лабораторной

✅ Результат
Сервер в Docker успешно запущен, Nginx отдаёт мою HTML-страницу.
