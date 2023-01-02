import React, { useState } from 'react'
import { Bar } from 'react-chartjs-2';

export default function DashBar({e,f,m,a,ma,j,ju,ag,s,o,n,d}) {
  const labels = ['En','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'];
  const  data = {
      labels: labels,
    datasets: [{
      label: 'Total de Solicitudes por mes',
      data: [e, f, m, a, ma, j, ju, ag, s, o, n, d],
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(255, 159, 64, 0.2)',
        'rgba(255, 205, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(201, 203, 207, 0.2)'
      ],
      borderColor: [
        'rgb(255, 99, 132)',
        'rgb(255, 159, 64)',
        'rgb(255, 205, 86)',
        'rgb(75, 192, 192)',
        'rgb(54, 162, 235)',
        'rgb(153, 102, 255)',
        'rgb(201, 203, 207)'
      ],
      borderWidth: 1
    }] 
  };
    return (
        <div id="chart">
            <Bar 
            data={data} 
            type="Bar" 
            className='max-w-md justify-center bg-white p-10 rounded-lg drop-shadow'
            height={400}
            width={400}
            />
        </div>
    );
}