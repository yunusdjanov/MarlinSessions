MarlinSessions

## Использование Session()


#### **Метод-flash() : Для создание flash уведомление**

<h4>Принимает</h4> 

1.name - название сессии <br> 
2.string - текст уведомления. <br>
flash(string $name [string $string ])


<h4>Использования:</h4>

Session::flash('success', 'Register success');

<h4>Вывод:</h4>

echo Session::flash('success');

#### **exists() : Для проверки на существования сессии.**

<h4>Принимает</h4> 

1.name - название сессии. <br>
exists(string $name)

<h4>Использования:</h4>

if (Session::exists('success'));

#### **put() :  Для создания сессии.**

<h4>Принимает</h4> 

1.name - название сессии. <br>
2.string - текст уведомления. <br>

put(string $name [string $string])

<h4>Использования:</h4>

Session::put('success', 'Register success'));

#### **get() - Метод для получения сессии.**

<h4>Принимает</h4> 

1.name - название сессии. <br>
get(string $name)

<h4>Использования:</h4>

echo Session::get('success');

#### delete() - Метод для удаления сессии.**

<h4>Принимает</h4> 

1.name - название сессии. <br>
delete(string $name)

<h4>Использования:</h4>

Session::delete('success');
