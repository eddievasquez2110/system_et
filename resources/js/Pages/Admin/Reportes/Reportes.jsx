import React from 'react';
import Navbar from '@/Layouts/Navbar';
import { Head } from '@inertiajs/inertia-react';
import DashCircle from '@/Components/DashCircle';
import DashBar from '@/Components/DashBar';

export default function Admin({auth, total}) {
    return (
        <Navbar auth={auth}>
            <Head title='Admin'/>
                <div className='flex place-content-around mt-8'>
                    <div className='py-10'>
                        <DashBar className='' total={total}></DashBar>
                    </div>
                </div>
        </Navbar>
    );
}