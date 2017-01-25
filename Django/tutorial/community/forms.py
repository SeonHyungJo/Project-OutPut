from django.forms import ModelForm
from community.models import *

#form을 만든 형태 views.py에 만든 것을 토대로 만듬
class Form(ModelForm):
    class Meta:
        model = Article
        fields=['name', 'title', 'contents', 'url', 'email']
