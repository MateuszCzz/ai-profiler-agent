<script setup lang="ts">
import { ref } from "vue";

const laravelConnection = ref("");
const pythonConnection = ref("");
const pythonRandomResult = ref("");

async function testLaravel() {
  try {
    const res = await fetch("http://127.0.0.1:8000/api/test");
    const data = await res.json();

    laravelConnection.value = data.message ?? "No message";
  } catch (err) {
    laravelConnection.value = "Error";
  }
}

async function testPython() {
  try {
    const res = await fetch("http://127.0.0.1:8000/api/test-python");
    const data = await res.json();

    pythonConnection.value = data.message ?? "No message";
    pythonRandomResult.value = data.random ?? "-";
  } catch (err) {
    pythonConnection.value = "Error";
  }
}
</script>

<template>
  <section id="center">
    <div style="margin-bottom: 20px;">
      <button @click="testLaravel">Test Laravel</button>
      <button @click="testPython">Test Python through Laravel</button>
    </div>

    <table border="1" cellpadding="10">
      <thead>
        <tr>
          <th>Service</th>
          <th>Result</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Laravel API</td>
          <td>{{ laravelConnection }}</td>
        </tr>
        <tr>
          <td>Python Serivce</td>
          <td>{{ pythonConnection }}</td>
        </tr>
        <tr>
          <td>Python Random</td>
          <td>{{ pythonRandomResult }}</td>
        </tr>
      </tbody>
    </table>
  </section>
</template>