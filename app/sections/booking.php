<section id="booking" class="py-16 bg-gradient-to-r from-primary to-secondary text-white">
    <div class="container mx-auto px-4 max-w-4xl text-center">
        <h2 class="text-4xl font-heading font-bold mb-6">Pronto para sua estadia inesquecível?</h2>
        <p class="text-xl max-w-2xl mx-auto mb-10">Reserve agora sua estadia na Casa Rosário através do Airbnb ou entre em contato direto pelo WhatsApp</p>

        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="<?= e($site['links']['whatsapp']) ?>" target="_blank" rel="noopener noreferrer" class="btn-primary bg-white text-dark py-4 px-8 rounded-full text-lg font-semibold shadow-lg flex items-center justify-center gap-2">
                <i class="fab fa-whatsapp"></i> WhatsApp
            </a>
            <a href="<?= e($site['links']['airbnb']) ?>" target="_blank" rel="noopener noreferrer" class="btn-primary bg-rose-600 hover:bg-rose-700 text-white py-4 px-8 rounded-full text-lg font-semibold shadow-lg flex items-center justify-center gap-2">
                <i class="fab fa-airbnb"></i> Reservar no Airbnb
            </a>
        </div>
    </div>
</section>
