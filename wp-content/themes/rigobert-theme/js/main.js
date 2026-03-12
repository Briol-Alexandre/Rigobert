const header = document.getElementById("site-header");

if (header && document.body.classList.contains("home")) {
    const heroHeight = window.innerHeight;

    window.addEventListener("scroll", () => {
        if (window.scrollY > heroHeight - 200) {
            header.classList.remove("bg-transparent", "text-background");
            header.classList.add("bg-white", "text-main");
        } else {
            header.classList.add("bg-transparent", "text-background");
            header.classList.remove("bg-white", "text-main");
        }
    });
}

// Lightbox gallery
document.addEventListener("DOMContentLoaded", function () {
    const galleryLinks = document.querySelectorAll(".gallery-image");

    galleryLinks.forEach((link) => {
        link.addEventListener("click", function (e) {
            e.preventDefault();

            const imageUrl = this.href;
            const imageAlt = this.querySelector("img").alt;

            // Create modal
            const modal = document.createElement("div");
            modal.className = "fixed inset-0 bg-black bg-opacity-90 flex items-center justify-center z-50 p-4";
            modal.innerHTML = `
                <div class="relative max-w-4xl max-h-full">
                    <img src="${imageUrl}" alt="${imageAlt}" class="max-w-full max-h-screen object-contain">
                    <button class="absolute top-4 right-4 text-white text-3xl bg-black bg-opacity-50 rounded-full w-10 h-10 flex items-center justify-center hover:bg-opacity-75 transition" aria-label="Fermer">
                        ×
                    </button>
                </div>
            `;

            document.body.appendChild(modal);

            // Close modal
            const closeBtn = modal.querySelector("button");
            const closeModal = () => {
                modal.remove();
            };

            closeBtn.addEventListener("click", closeModal);
            modal.addEventListener("click", function (e) {
                if (e.target === modal) closeModal();
            });

            // Close on Escape key
            const escapeHandler = (e) => {
                if (e.key === "Escape") {
                    closeModal();
                    document.removeEventListener("keydown", escapeHandler);
                }
            };
            document.addEventListener("keydown", escapeHandler);
        });
    });
});