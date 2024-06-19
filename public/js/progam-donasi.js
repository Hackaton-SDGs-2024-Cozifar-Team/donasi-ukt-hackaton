
        function animateValue(id, start, end, duration, prefix = "", suffix = "") {
            const element = document.getElementById(id).querySelector("h3");
            let startTimestamp = null;
            const step = (timestamp) => {
                if (!startTimestamp) startTimestamp = timestamp;
                const progress = Math.min((timestamp - startTimestamp) / duration, 1);
                element.innerText = prefix + Math.floor(progress * (end - start) + start) + suffix;
                if (progress < 1) {
                    window.requestAnimationFrame(step);
                }
            };
            window.requestAnimationFrame(step);
        }

        document.addEventListener("DOMContentLoaded", () => {
            const observerOptions = {
                root: null,
                rootMargin: '0px',
                threshold: 0.1
            };
            
            var uang_donasi = document.getElementById('uang_donasi').value;
            var donatur = document.getElementById('donatur').value;
            var pengajuan = document.getElementById('pengajuan').value;
            
            const observerCallback = (entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const id = entry.target.id;
                        if (id === "donation-amount") {
                            animateValue("donation-amount", 0, uang_donasi, 2000, "Rp ", " ");
                        } else if (id === "donors-count") {
                            animateValue("donors-count", 0, donatur, 1000, "", " Donatur");
                        } else if (id === "verified-recipients") {
                            animateValue("verified-recipients", 0, pengajuan, 1000, "", " Calon Penerima");
                        }
                        observer.unobserve(entry.target);
                    }
                });
            };

            const observer = new IntersectionObserver(observerCallback, observerOptions);

            const targets = document.querySelectorAll('#donation-amount, #donors-count, #verified-recipients');
            targets.forEach(target => observer.observe(target));
        });
