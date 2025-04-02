<script>
    document.addEventListener("DOMContentLoaded", function () {
        const button = document.getElementById("mobile-menu-button");
        const menu = document.getElementById("mobile-nav");

        button?.addEventListener("click", (e) => {
            e.stopPropagation(); // Ngăn chặn sự kiện lan ra ngoài
            const isHidden = menu.classList.contains("hidden");

            menu.classList.toggle("hidden", !isHidden);
            menu.classList.toggle("flex", isHidden);
            menu.classList.toggle("flex-col", isHidden);
        });

        // Đóng menu nếu click ra ngoài
        document.addEventListener("click", function (e) {
            // Nếu menu đang mở và click ngoài vùng menu + button
            if (!menu.classList.contains("hidden") &&
                !menu.contains(e.target) &&
                !button.contains(e.target)) {
                menu.classList.add("hidden");
                menu.classList.remove("flex", "flex-col");
            }
        });
    });
</script>
