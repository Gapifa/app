self.addEventListener('fetch', function(event) {
  event.respondWith(
    fetch(event.request).catch(() => {
      return new Response('صفحه در دسترس نیست.');
    })
  );
});
