<x-layout>
    <h1>Написать статью</h1>

    <form method="POST" action="/journalist">
        @csrf
        <label for="title">Заголовок</label>
        <input type="text" id="title" name="title" placeholder="Заголовок">

        <label for="category">Категория</label>
        <select id="category" name="category">
            <option>Космос</option>
            <option>IT</option>
            <option>Медицина</option>
        </select>

        <label for="text">Текст статьи</label>
        <textarea id="text" name="text" rows="10" placeholder="Текст статьи"></textarea>

        <button type="submit">Отправить</button>
    </form>
</x-layout>
