# Import the required module for text
# to speech conversion
from gtts import gTTS
import pygame
import sys

# This module is imported so that we can
# play the converted audio
import os

# The text that you want to convert to audio
print(printxt)
if len(sys.argv) > 1:
    printxt = sys.argv[1]
    output=print(printxt)
else:
    output=print("hai")


'''# Language in which you want to convert
language = 'en'

# Passing the text and language to the engine,
# here we have marked slow=False. Which tells
# the module that the converted audio should
# have a high speed
myobj = gTTS(text=mytext, lang=language, slow=False)

# Saving the converted audio in a mp3 file named
# welcome
myobj.save("audio.mp3")

# Playing the converted file
pygame.mixer.init()
pygame.mixer.music.load("audio.mp3")
pygame.mixer.music.play()'''
