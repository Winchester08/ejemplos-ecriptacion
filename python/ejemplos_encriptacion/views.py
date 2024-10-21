from django.shortcuts import render
import hashlib


def comienzo(request):
    
    m = hashlib.sha256()
    clave1  = hashlib.md5(b'dell')
    clave2 = hashlib.md5(b'manzana')
    des = clave1.hexdigest()
    des2 = clave2.hexdigest()

    if des == des2:
        notificacion = "Datos exitosos, puede ingresar"
    else:
         notificacion= "Datos inválidos, no puede ingresar"
   
    mensaje = "Ejemplos para Encriptar con Python"
    
    return render(request, 'archivos/inicio.html',{
        'msj':mensaje,
        'clave':des,
        'res':notificacion
    })

