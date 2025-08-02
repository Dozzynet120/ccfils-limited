<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>


<!-- Video Banner with Fallback -->
<video class="banner-video" autoplay muted loop playsinline poster="assets/images/flyer1.jpg">
  <source src="assets/images/LAG.mp4" type="video/mp4">
  <div class="hero-fallback">
  </div>
</video>

<!-- Blog Hero -->
<section class="section blog-hero" data-aos="fade-up">
  <div class="container text-center">
    <h1 class="section-title">Real Estate Insights</h1>
    <p>Frame structures are an essential part of modern construction due to their durability, strength, flexibility, and cost-efficiency. They provide stability while allowing for innovative architectural designs and improved resistance to environmental forces..</p>
  </div>
</section>

<!-- Blog Section -->
<section class="section blog-section" data-aos="fade-up">
  <div class="container">
    <div class="blog-layout">
      
      <!-- Blog Cards -->
      <div class="blog-main" id="blog-posts">
        <!-- Dynamic blog posts inserted here -->
      </div>

      <!-- Sidebar -->
      <aside class="blog-sidebar">
        <div class="sidebar-box">
          <h4>Search</h4>
          <form action="#" method="GET" class="search-form">
            <input type="text" name="query" placeholder="Search...">
            <button type="submit"><i class="fas fa-search"></i></button>
          </form>
        </div>

        <div class="sidebar-box">
          <h4>Categories</h4>
          <ul class="sidebar-list" id="categories"></ul>
        </div>

        <div class="sidebar-box">
          <h4>Latest Posts</h4>
          <ul class="latest-posts" id="latest-posts"></ul>
        </div>
      </aside>

    </div>

    <!-- Load More -->
    <div class="text-center" id="load-more-wrapper"><br>
      <button id="load-more" class="btn">Load More</button>
    </div>
  </div>
</section>

<script>
let page = 1;
let totalLoaded = 0;
const maxPosts = 12;

function fetchPosts() {
  if (totalLoaded >= maxPosts) {
    document.getElementById('load-more-wrapper').style.display = 'none';
    return;
  }

  fetch(`https://ccfils.com.ng/wp-json/wp/v2/posts?_embed&per_page=4&page=${page}`)
    .then(res => res.json())
    .then(posts => {
      if (!posts.length) {
        document.getElementById('load-more-wrapper').style.display = 'none';
        return;
      }

      posts.forEach(post => {
        if (totalLoaded >= maxPosts) return;

        const image = post._embedded['wp:featuredmedia']?.[0]?.source_url || 'assets/images/default.jpg';
        const title = post.title.rendered;
        const excerpt = post.excerpt.rendered.replace(/(<([^>]+)>)/gi, "").slice(0, 120) + "...";
        const link = post.link;

        const card = document.createElement('div');
        card.className = 'blog-card';
        card.setAttribute('data-aos', 'fade-up');
        card.innerHTML = `
          <div class="blog-card-img">
            <img src="${image}" alt="${title}">
          </div>
          <div class="blog-card-body">
            <h3>${title}</h3>
            <p>${excerpt}</p>
            <a href="${link}" class="btn-small" target="_blank">Read More</a>
          </div>
        `;

        document.getElementById('blog-posts').appendChild(card);
        totalLoaded++;
      });

      if (totalLoaded >= maxPosts) {
        document.getElementById('load-more-wrapper').style.display = 'none';
      }

      page++;
    })
    .catch(err => console.error(err));
}

function fetchSidebar() {
  fetch('https://ccfils.com.ng/wp-json/wp/v2/categories')
    .then(res => res.json())
    .then(cats => {
      const list = document.getElementById('categories');
      cats.forEach(cat => {
        const li = document.createElement('li');
        li.innerHTML = `<a href="#">${cat.name}</a>`;
        list.appendChild(li);
      });
    });

  fetch('https://ccfils.com.ng/wp-json/wp/v2/posts?per_page=5')
    .then(res => res.json())
    .then(posts => {
      const list = document.getElementById('latest-posts');
      posts.forEach(post => {
        const li = document.createElement('li');
        li.innerHTML = `<a href="${post.link}" target="_blank">${post.title.rendered}</a>`;
        list.appendChild(li);
      });
    });

    // Recent Comments
fetch('https://ccfils.com.ng/wp-json/wp/v2/comments?per_page=5')
  .then(res => res.json())
  .then(comments => {
    const sidebar = document.querySelector('.blog-sidebar');
    const box = document.createElement('div');
    box.className = 'sidebar-box';
    box.innerHTML = '<h4>Recent Comments</h4><ul class="sidebar-list" id="recent-comments"></ul>';
    sidebar.appendChild(box);

    const list = box.querySelector('#recent-comments');
    comments.forEach(comment => {
      const li = document.createElement('li');
      li.innerHTML = `<strong>${comment.author_name}:</strong> ${comment.content.rendered.slice(0, 40)}...`;
      list.appendChild(li);
    });
  });

  // Archives (simulated)
fetch('https://ccfils.com.ng/wp-json/wp/v2/posts?per_page=20')
  .then(res => res.json())
  .then(posts => {
    const archiveMap = {};
    posts.forEach(post => {
      const date = new Date(post.date);
      const monthYear = date.toLocaleString('default', { month: 'long', year: 'numeric' });
      archiveMap[monthYear] = archiveMap[monthYear] || [];
      archiveMap[monthYear].push(post);
    });

    const sidebar = document.querySelector('.blog-sidebar');
    const box = document.createElement('div');
    box.className = 'sidebar-box';
    box.innerHTML = '<h4>Archives</h4><ul class="sidebar-list" id="archives"></ul>';
    sidebar.appendChild(box);

    const list = box.querySelector('#archives');
    for (const archive in archiveMap) {
      const li = document.createElement('li');
      li.innerHTML = `<a href="#">${archive} (${archiveMap[archive].length})</a>`;
      list.appendChild(li);
    }
  });

}

document.addEventListener('DOMContentLoaded', () => {
  fetchPosts();
  fetchSidebar();
  document.getElementById('load-more').addEventListener('click', fetchPosts);
});
</script>

<?php include 'includes/footer.php'; ?>
