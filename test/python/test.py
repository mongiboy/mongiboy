with open('newFile.txt', 'wt', encoding='utf-8') as inFile:
    line = 'Наш новый файл'
    print(line + ' writing')
    inFile.write (line)