import random
import asyncio
from fastapi import FastAPI

app = FastAPI()

@app.get("/test")
async def test():
    # imitate processing delay
    # await asyncio.sleep(3)
    
    result = random.choice(["yes", "no"])
    
    return {
        "message": result
    }