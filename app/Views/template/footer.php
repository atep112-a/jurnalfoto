</div>

<script>
    const sidebar = document.getElementById('sidebar');
    const sidebarToggle = document.getElementById('sidebarToggle');
    const navbarItemsToggle = document.getElementById('navbarItemsToggle');
    const navbarItems = document.querySelectorAll('.navbar-items.hidden');

    sidebarToggle.addEventListener('click', () => {
        sidebar.classList.toggle('hidden');
    });

    navbarItemsToggle.addEventListener('click', () => {
        navbarItems.forEach(item => {
            item.classList.toggle('hidden');
        });
    });
</script>
</body>

</html>