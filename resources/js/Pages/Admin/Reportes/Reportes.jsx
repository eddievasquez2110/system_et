import React from 'react';
import Navbar from '@/Layouts/Navbar';
import { Head } from '@inertiajs/inertia-react';
import DashBar from '@/Components/DashBar';

export default function Admin({auth}) {
    return (
        <Navbar auth={auth}>
            <Head title='Admin'/>
                <div className='flex place-content-around mt-8'>
                    <div className='py-10'>
                        <DashBar></DashBar>
                    </div>
                </div>
        </Navbar>
    );
}