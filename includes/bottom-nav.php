<nav class="bottom-nav">
    <button class="nav-item active" onclick="switchTab('profile', this)">
        <i class="fas fa-user"></i>
        <span>Profile</span>
    </button>
    <button class="nav-item" onclick="switchTab('links', this)">
        <i class="fas fa-link"></i>
        <span>Links</span>
    </button>
    <button class="nav-item" onclick="switchTab('contact', this)">
        <i class="fas fa-envelope"></i>
        <span>Contact</span>
    </button>
</nav>

<script>
function switchTab(tabId, element) {
    document.querySelectorAll('.tab-view').forEach(el => el.classList.remove('active'));
    document.querySelectorAll('.nav-item').forEach(el => el.classList.remove('active'));
    
    document.getElementById('view-' + tabId).classList.add('active');
    element.classList.add('active');
}
</script>