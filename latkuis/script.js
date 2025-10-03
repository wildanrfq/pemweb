function navigate(direction) {
    window.scrollBy({
        left: direction === "left" ? 300 : -300,
        behavior: 'smooth',
    })
}