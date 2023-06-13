import './bootstrap';

const URL = '/api/books/latest';

const loadData = async () => {
  const listElement = document.getElementById('latestBooks');
  const response = await fetch(URL);
  const data = await response.json();

  listElement.innerHTML = '';

  data.forEach((book) => {
    const item = document.createElement('li');
    item.innerText = book.title;
    listElement.appendChild(item);
  });
}

document.addEventListener('DOMContentLoaded', () => {
  const button = document.getElementById('loadBooksBtn');

  button.addEventListener('click', loadData);
});
