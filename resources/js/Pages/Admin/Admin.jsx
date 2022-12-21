import React from 'react';
import Navbar from '@/Layouts/Navbar';
import { Head } from '@inertiajs/inertia-react';
import DashCircle from '@/Components/DashCircle';
import DashBar from '@/Components/DashBar';

export default function Admin({auth}) {
    return (
        <Navbar auth={auth}>
            <Head title='Admin'/>
            <div className='flex flex-col'>
                <div className='wrapper flex flex-wrap justify-center mt-8 gap-4 pb-5' id='ChartCircle'>
                    <DashCircle></DashCircle>
                    <DashCircle></DashCircle>
                    <DashCircle></DashCircle>
                </div>
                
            </div>
        </Navbar>
    );
}