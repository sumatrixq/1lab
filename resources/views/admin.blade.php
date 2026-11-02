<x-layout>
    <h1>Админ-панель</h1>

    <h2>Статьи</h2>
    <table>
        <tr>
            <th>Заголовок</th>
            <th>Статус</th>
            <th>Действия</th>
        </tr>
        <tr>
            <td>Телескоп сделал снимки галактик</td>
            <td>Опубликована</td>
            <td>
                <button>Редактировать</button>
                <button>Заблокировать</button>
                <button>Удалить</button>
            </td>
        </tr>
        <tr>
            <td>Нейросеть предсказала структуру белков</td>
            <td>Опубликована</td>
            <td>
                <button>Редактировать</button>
                <button>Заблокировать</button>
                <button>Удалить</button>
            </td>
        </tr>
    </table>

    <h2>Изменить роль пользователя</h2>
    <form method="POST" action="/admin">
        @csrf
        <label for="user">Пользователь</label>
        <select id="user" name="user">
            <option>Анна Орлова</option>
            <option>Игорь Смирнов</option>
        </select>

        <label for="role">Роль</label>
        <select id="role" name="role">
            <option>Пользователь</option>
            <option>Журналист</option>
            <option>Администратор</option>
        </select>

        <button type="submit">Сохранить</button>
    </form>
</x-layout>
