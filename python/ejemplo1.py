from django.http import HttpResponse

def comienzo(request):
    return (request, 'archivos/inicio.html')