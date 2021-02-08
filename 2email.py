import re

def dogrulama(email):
    try:
        mail = email.split('@')[1] 
    except:
        return False
    if len(mail) < 1:
        return False
    elif len(mail.split('.')) > 3: 
        return False

    if re.match(r'[a-zA-Z0-9\-_]+@[a-zA-Z0-9]+\.[a-zA-Z0-9]+', email):
        return True
    else:
        return False

len_mail = int(input('İlk olarak uzantı uzunluğunu giriniz: '))
email = input('Mail adresini giriniz: ')
if dogrulama(email):
    print(len_mail)
    print(email)
    print('Mail adresiniz uygundur.')
else:
    print(len_mail)
    print(email)
    print('Mail adresiniz uygun değildir.')
