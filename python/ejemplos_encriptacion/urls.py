from django.urls import path
from . import views

urlpatterns = [
    path('inicio/',views.comienzo, name='inicio' )
]
