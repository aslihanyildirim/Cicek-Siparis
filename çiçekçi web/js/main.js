document.addEventListener("DOMContentLoaded", () => {
  const toggleBtn = document.getElementById("toggleSidebar");
  const sidebar = document.querySelector(".sidebar");

  toggleBtn?.addEventListener("click", () => {
    sidebar.classList.toggle("closed");
  });

  const container = document.querySelector('.favorites-container');

  if (container) {
    const favorites = JSON.parse(localStorage.getItem('favorites')) || [];

    container.innerHTML = favorites.length
      ? favorites.map(item => `
          <div class="product">
            <img src="${item.imgSrc}" alt="${item.title}">
            <h3>${item.title}</h3>
            <p class="price">${item.price}</p>
            <p class="discount-price">${item.discount}</p>
            <button onclick="sepeteEkle('${item.title}', ${parseInt(item.price) || 0})">Sepete Ekle</button>
            <button class="favorite active">❤️</button>
          </div>
        `).join('')
      : '<p>Henüz favori ürün yok.</p>';

    container.addEventListener('click', (e) => {
      if (e.target.classList.contains('favorite')) {
        const productDiv = e.target.closest('.product');
        const title = productDiv.querySelector('h3').textContent;

        let favorites = JSON.parse(localStorage.getItem('favorites')) || [];
        favorites = favorites.filter(item => item.title !== title);
        localStorage.setItem('favorites', JSON.stringify(favorites));

        productDiv.remove();
        showToast('Favorilerden çıkarıldı');

        if (!container.querySelector('.product')) {
          container.innerHTML = '<p>Henüz favori ürün yok.</p>';
        }
      }
    });

    return;
  }

  document.querySelectorAll('.favorite').forEach(button => {
    button.addEventListener('click', () => {
      const product = button.closest('.product');
      const title = product.querySelector('h3').textContent;
      const price = product.querySelector('.price')?.textContent || '';
      const discount = product.querySelector('.discount-price')?.textContent || '';
      const imgSrc = product.querySelector('img')?.getAttribute('src');

      let favorites = JSON.parse(localStorage.getItem('favorites')) || [];
      const index = favorites.findIndex(item => item.title === title);

      if (index > -1) {
        favorites.splice(index, 1);
        button.classList.remove('active');
        button.textContent = '🤍';
        showToast('Favorilerden çıkarıldı');
      } else {
        favorites.push({ title, price, discount, imgSrc });
        button.classList.add('active');
        button.textContent = '❤️';
        showToast('Favorilere eklendi!');
      }

      localStorage.setItem('favorites', JSON.stringify(favorites));
    });
  });
});


function showToast(message) {
  const toast = document.getElementById('toast');
  if (toast) {
    toast.textContent = message;
    toast.classList.add('show');
    setTimeout(() => {
      toast.classList.remove('show');
    }, 1000);
  }
}

function sepeteEkle(urunAdi, fiyat) {
  let sepet = JSON.parse(localStorage.getItem('sepet')) || [];
  sepet.push({ urunAdi, fiyat });
  localStorage.setItem('sepet', JSON.stringify(sepet));
  showToast(`${urunAdi} sepete eklendi!`);
}
